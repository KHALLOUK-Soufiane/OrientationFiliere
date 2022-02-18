const form = document.querySelector('#studentNotesForm');
let studentData = JSON.parse(localStorage.getItem('studentData'));

const renderStudentData = (data) => {
    data.forEach((d) => {
        d.name = d.name
        d.value = +d.value
    })

    let y = d3.scaleLinear().range([HEIGHT, 0]);
    let x = d3.scaleBand().range([0, WIDTH]);

    y.domain([0,20]).nice();

    x.domain(data.map((data) => data.name));

    if($('#svg1 svg g path[stroke="red"]').length){
        $('#svg1 svg g path[stroke="red"]').remove();
    }

    if($('#svg2 svg g path[stroke="red"]').length){
        $('#svg2 svg g path[stroke="red"]').remove();
    }
    if (typeof SVG1 !== 'undefined') {
        SVG1.append("path")
        .datum(data)
        .attr("fill", "none")
        .attr("stroke", "red")
        .attr("d", d3.line()
        .x(function(d) { return x(d.name) + x.bandwidth()/2})
        .y(function(d) { return y(d.value) })
        );
    }else if(typeof SVG2 !== 'undefined'){
        SVG2.append("path")
        .datum(data)
        .attr("fill", "none")
        .attr("stroke", "red")
        .attr("d", d3.line()
        .x(function(d) { return x(d.name) + x.bandwidth()/2})
        .y(function(d) { return y(d.value) })
        );
    }
}

if ($('#studentNotesForm').length){
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        studentData = $(form).serializeArray();
        localStorage.setItem('studentData', JSON.stringify(studentData));
        renderStudentData(studentData);
    });
}

window.onload = () => {
    if(typeof data !== 'undefined'){
        data = JSON.parse(data)[0]
        newData = [];
        for (const key in data) {
            newData.push(`{"matiere" : "${key}", "note" : ${round(data[key], 2)}}`);
        }
        data = [];
        newData.forEach(object => {
            data.push(JSON.parse(object));
        });
        render(data);

        minGM = JSON.parse(minFiliere.GM)[0];
        minGI = JSON.parse(minFiliere.GI)[0];
        minGEM = JSON.parse(minFiliere.GEM)[0];
        minIAGI = JSON.parse(minFiliere.IAGI)[0];
        minMSEI = JSON.parse(minFiliere.MSEI)[0];

        maxGM = JSON.parse(maxFiliere.GM)[0];
        maxGI = JSON.parse(maxFiliere.GI)[0];
        maxGEM = JSON.parse(maxFiliere.GEM)[0];
        maxIAGI = JSON.parse(maxFiliere.IAGI)[0];
        maxMSEI = JSON.parse(maxFiliere.MSEI)[0];
    }

    if(typeof fil !== 'undefined'){
        dataGM = JSON.parse(dataFiliere.GM)[0];
        dataGI = JSON.parse(dataFiliere.GI)[0];
        dataGEM = JSON.parse(dataFiliere.GEM)[0];
        dataIAGI = JSON.parse(dataFiliere.IAGI)[0];
        dataMSEI = JSON.parse(dataFiliere.MSEI)[0];
        renderFiliere(dataFiliere, fil);
    }

    if (studentData !== null) {
        studentData.forEach(item => {
            $('input[name="'+item.name+'"]').val(item.value);
        })
        renderStudentData(studentData);
    }
}