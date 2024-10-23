(async () => {
    const div = document.querySelector("#graphique1");
    if (div) {
        const map1Response = await fetch(mapData.map1Url);
        const map1 = await map1Response.json();

        const departementsResponse = await fetch(mapData.departementsUrl);
        const departementsGeoJSON = await departementsResponse.json();

        function getFormattedCandidate1(candidat) {
            switch (candidat) {
                case 'LE PEN':
                    return 'Marine Le Pen';
                case 'MACRON':
                    return 'Emmanuel Macron';
                case 'MÉLENCHON':
                    return 'Jean-Luc Mélenchon';
                case 'FILLON':
                    return 'François Fillon';
            }
        }

        const amap2017 = Plot.plot({
            projection: {
                type: "mercator",
                domain: departementsGeoJSON
            },
            color: {
                type: "ordinal",
                domain: ['LE PEN', 'MACRON', 'MÉLENCHON', 'FILLON'],
                range: ['#1C5E8C', '#F2D86B', '#F94A4F', '#0387DA'],
                label: "Candidats majoritaires",
                legend: true
            },
            marks: [
                Plot.geo(departementsGeoJSON, {
                    fill: d => {
                        const deptName = d.properties.nom;
                        const candidatsDept = map1.filter(p => p.departement === deptName);

                        if (candidatsDept.length === 0) return null;

                        const candidatMajoritaire = candidatsDept.reduce((max, curr) =>
                            parseInt(curr.voix) > parseInt(max.voix) ? curr : max
                        );

                        return candidatMajoritaire ? candidatMajoritaire.candidat : null;
                    },
                    stroke: "#000",
                    title: d => {
                        const deptName = d.properties.nom;
                        const candidatsDept = map1.filter(p => p.departement === deptName);

                        if (candidatsDept.length === 0) return deptName;

                        const sortedCandidats = candidatsDept.sort((a, b) => parseInt(b.voix) - parseInt(a.voix));
                        const top3Candidats = sortedCandidats.slice(0, 3);

                        let tooltipText = `${deptName}\n> ${getFormattedCandidate1(top3Candidats[0].candidat)} : ${d3.format(",.0f")(top3Candidats[0].voix).replace(/,/g, " ")} voix`;

                        tooltipText += top3Candidats.slice(1).map(c =>
                            `\n${getFormattedCandidate1(c.candidat)} : ${d3.format(",.0f")(c.voix).replace(/,/g, " ")} voix`
                        ).join("");

                        return tooltipText;
                    }
                })
            ],
            subtitle: "Visualisation des quatre premiers candidats en termes de voix pour chaque département, avec mise en avant du candidat ayant obtenu le plus de voix lors du Premier Tour des Élections de 2017."
        });

        div.append(amap2017);
    }
})();
