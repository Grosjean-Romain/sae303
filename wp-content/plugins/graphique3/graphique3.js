fetch(absentData.absenteisme)
  .then(response => response.json())
  .then(absenteisme => {

    const grouped2Data = d3.rollup(absenteisme, 
      v => d3.sum(v, d => d.absent_T2), 
      d => d.annee_T2);

    const grouped2Array = Array.from(grouped2Data, ([annee_T2, absent_T2]) => ({ annee_T2, absent_T2 }));

    const grouped3Data = d3.rollup(absenteisme, 
      v => d3.sum(v, d => d.absent_T1), 
      d => d.annee_T1);

    const grouped3Array = Array.from(grouped3Data, ([annee_T1, absent_T1]) => ({ annee_T1, absent_T1 }));

    const chart = Plot.plot({
      height: 500,
      width: 800,
      marginLeft: 75,
      marginTop: 50,
      x: {
        label: "Année",
        grid: true,
        ticks: [2002, 2007, 2012, 2017, 2022],
        tickFormat: d => d3.format(",.0f")(d).replace(/,/g, ""),
        domain: [2000, 2024],
      },
      y: {
        label: "Taux d'Abstention Total",
        grid: true,
        domain: [-d3.max([...grouped3Array, ...grouped2Array], d => d.absent_T1 || d.absent_T2) * 0.1, 
                d3.max([...grouped3Array, ...grouped2Array], d => d.absent_T1 || d.absent_T2) * 1.05],
        tickFormat: d => d3.format(",.0f")(d).replace(/,/g, " "),
      },
      color: {
        legend: true,
        domain: ["Premier Tour", "Deuxième Tour"],
        range: ["#0387DA", "#F94A4F"],
      },
      marks: [
        Plot.line(grouped3Array, { 
          x: d => d.annee_T1, 
          y: d => d.absent_T1, 
          stroke: "#0387DA", 
          strokeWidth: 3 
        }),
        Plot.dot(grouped3Array, { 
          x: d => d.annee_T1, 
          y: d => d.absent_T1, 
          stroke: "#166D99", 
          fill: "#166D99", 
          r: 5,
          title: d => `Année : ${d.annee_T1}\nAbstention : ${d3.format(",.0f")(d.absent_T1).replace(/,/g, " ")}`,
          tip: true
        }),
        Plot.line(grouped2Array, { 
          x: d => d.annee_T2, 
          y: d => d.absent_T2, 
          stroke: "#F94A4F",
          strokeWidth: 3 
        }),
        Plot.dot(grouped2Array, { 
          x: d => d.annee_T2, 
          y: d => d.absent_T2, 
          stroke: "#B72732", 
          fill: "#B72732", 
          r: 5,
          title: d => `Année : ${d.annee_T2}\nAbstention : ${d3.format(",.0f")(d.absent_T2).replace(/,/g, " ")}`,
          tip: true
        })
      ],
      subtitle: "Comparaison entre les Premiers et Deuxièmes Tours : Tendances sur les 20 Dernières Années",
      fontSize: 14
    });

    document.getElementById("graphique3").appendChild(chart);
  });
