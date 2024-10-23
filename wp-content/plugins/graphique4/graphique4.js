fetch(scoreData2017.score2017)
  .then(response => response.json())
  .then(score2017 => {

    let name2Filter = null;

    const graphique4Container = document.getElementById("graphique4");
    if (!graphique4Container) {
      console.error('Element with ID "graphique4" not found.');
      return;
    }

    function filterData() {
      const filtered2Candidat = score2017.filter(a => {
        return !name2Filter || a.candidat === name2Filter;
      });

      const candidat2Counts = ["MACRON", "LE PEN"]
        .map(candidat => {
          const totalVoix = filtered2Candidat.filter(a => a.candidat === candidat)
            .reduce((total, a) => total + a.voix, 0);
          return totalVoix > 0 ? { candidat, count: totalVoix } : null;
        })
        .filter(d => d !== null);

      const graph2017 = Plot.plot({
        subtitle: 'Comparaison des Scores des Candidats : Le Début d\'une Nouvelle Rivalité sur la Scène Politique (2017)',
        marginLeft: 80,
        marginBottom: 40,
        marginTop: 40,
        width: 600,
        marks: [
          Plot.barY(candidat2Counts, { 
            x: "candidat",
            y: "count",     
            fill: "candidat",
            title: d => {
              const candidatName = d.candidat === "MACRON" ? "Emmanuel Macron" : "Marine Le Pen";
              const voix = d3.format(",.0f")(d.count).replace(/,/g, ' '); 
              return `${candidatName} : ${voix} voix`; 
            },
            tip: true
          }),
        ],
        y: {
          label: "Nombre de voix",
          domain: [0, 22000000],
          grid: true,
          tickFormat: d => d3.format(",.0f")(d).replace(/,/g, ' '),
        },
        x: {
          label: "Candidats",
        },
        color: {
          range: ["#166D99", "#B72732"],
          legend: true
        }
      });

      graphique4Container.innerHTML = '';
      graphique4Container.appendChild(graph2017);
    }

    const select = document.createElement("select");
    select.innerHTML = `
      <option value="">Tous</option>
      <option value="MACRON">Emmanuel Macron</option>
      <option value="LE PEN">Marine Le Pen</option>
    `;
    select.addEventListener("change", (e) => {
      name2Filter = e.target.value || null;
      filterData();
    });

    const filterContainer = document.getElementById("graphique4-filter");
    if (filterContainer) {
      filterContainer.appendChild(select);
    } else {
      console.error('Element with ID "graphique4-filter" not found.');
    }

    filterData();
});
