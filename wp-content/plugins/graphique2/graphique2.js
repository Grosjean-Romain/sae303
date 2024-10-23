(async () => {
    const div = document.querySelector("#graphique2");
    if (div) {
        const map2Response = await fetch(mapData.map2Url);
        const map2 = await map2Response.json();

        const departementsResponse = await fetch(mapData.departementsUrl);
        const departementsGeoJSON2022 = await departementsResponse.json();

      function getFormattedCandidate2022(candidat2022) {
  switch (candidat2022) {
    case 'LE PEN': return 'Marine Le Pen';
    case 'MACRON': return 'Emmanuel Macron';
    case 'MÉLENCHON': return 'Jean-Luc Mélenchon';
    case 'HIDALGO': return 'Anne Hidalgo';
    case 'JADOT': return 'Yannick Jadot';
    case 'DUPONT-AIGNAN': return 'Nicolas Dupont-Aignan';
    case 'LASSALLE': return 'Jean Lassalle';
    case 'POUTOU': return 'Philippe Poutou';
    case 'PÉCRESSE': return 'Valérie Pécresse';
    case 'ARTHAUD': return 'Nathalie Arthaud';
    case 'ZEMMOUR': return 'Éric Zemmour';
    case 'ROUSSEL': return 'Fabien Roussel';
      }
}

   const amap2022 = Plot.plot({
  projection: {
    type: "mercator", 
    domain: departementsGeoJSON2022
  },
  color: {
    type: "ordinal",
    domain: ['LE PEN', 'MACRON', 'MÉLENCHON'],
    range: ['#1C5E8C', '#F2D86B', '#F94A4F'],
    label: "Candidats majoritaires",
    legend: true
  },
  marks: [
    Plot.geo(departementsGeoJSON2022, {
      fill: d => {
        const deptName2022 = d.properties.nom;
        const candidatsDept2022 = map2.filter(p => p.departement2022 === deptName2022);

        if (candidatsDept2022.length === 0) return null;

        const candidatMajoritaire2022 = candidatsDept2022.reduce((max, curr) => 
          parseInt(curr.voix2022) > parseInt(max.voix2022) ? curr : max
        );

        return candidatMajoritaire2022 ? candidatMajoritaire2022.candidat2022 : null;
      },
      stroke: "#000",
      title: d => {
        const deptName2022 = d.properties.nom;
        const candidatsDept2022 = map2.filter(p => p.departement2022 === deptName2022);

        if (candidatsDept2022.length === 0) return deptName2022;

        const sortedCandidats2022 = candidatsDept2022.sort((a, b) => parseInt(b.voix2022) - parseInt(a.voix2022));

        const top3Candidats2022 = sortedCandidats2022.slice(0, 3);

        const candidatMajoritaire2022 = top3Candidats2022[0];
        let tooltipText2022 = `${deptName2022}\n> ${getFormattedCandidate2022(candidatMajoritaire2022.candidat2022)} < : ${d3.format(",.0f")(candidatMajoritaire2022.voix2022).replace(/,/g, " ")} voix\n`;

        tooltipText2022 += top3Candidats2022.slice(1).map(candidat2022 => 
          `${getFormattedCandidate2022(candidat2022.candidat2022)} : ${d3.format(",.0f")(candidat2022.voix2022).replace(/,/g, " ")} voix`
        ).join("\n");

        return tooltipText2022;
      },
      tip: true, 
    })
  ],
  title: "Répartition des Candidats Majoritaires par Département - Élection Présidentielle 2022",
  subtitle: "Visualisation des trois premiers candidats en termes de voix pour chaque département, avec mise en avant du candidat ayant obtenu le plus de voix lors du Premier Tour"
});
        div.append(amap2022);
    }
})();
