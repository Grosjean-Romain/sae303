fetch(scoreData2022.score2022)
  .then(response => response.json())
  .then(score2022 => {

    let nameFilter = null;

    const graphique5Container = document.getElementById("graphique5");
    if (!graphique5Container) {
      console.error('Element with ID "graphique5" not found.');
      return;
    }

    function filterData() {
      const filteredCandidat = score2022.filter(a => {
        return !nameFilter || a.candidat === nameFilter;
      });

      const candidatCounts = ["MACRON", "LE PEN"]
        .map(candidat => {
          const totalVoix = filteredCandidat.filter(a => a.candidat === candidat)
            .reduce((total, a) => total + a.voix, 0);
          return totalVoix > 0 ? { candidat, count: totalVoix } : null;
        })
        .filter(d => d !== null);

      const graph2022 = Plot.plot({
        subtitle: 'Comparaison des Scores des Candidats : Une Élection Déterminante pour les prochaines Élections (2022)',
        marginLeft: 80,
        marginBottom: 40,
        marginTop: 40,
        width: 600,
        marks: [
          Plot.barY(candidatCounts, { 
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

      graphique5Container.innerHTML = '';
      graphique5Container.appendChild(graph2022);
    }

    const select = document.createElement("select");
    select.innerHTML = `
      <option value="">Tous</option>
      <option value="MACRON">Emmanuel Macron</option>
      <option value="LE PEN">Marine Le Pen</option>
    `;
    select.addEventListener("change", (e) => {
      nameFilter = e.target.value || null;
      filterData();
    });

    const filterContainer = document.getElementById("graphique5-filter");
    if (filterContainer) {
      filterContainer.appendChild(select);
    } else {
      console.error('Element with ID "graphique5-filter" not found.');
    }

    filterData();
});