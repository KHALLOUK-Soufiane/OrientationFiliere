const svgk2 = document.getElementById("svg2")

const renderFiliere = (data, filiere) => {
    workingData = JSON.parse(data[filiere])[0]
    newData = [];
    for (const key in workingData) {
        newData.push(`{"matiere" : "${key}", "note" : ${round(workingData[key], 2)}}`);
    }
    data = [];
    newData.forEach(object => {
        data.push(JSON.parse(object));
    });

    document.getElementById("svg2").innerHTML = "";
    var svg = d3.select("#svg2").append("svg")
        .attr("viewBox", `0 0 ${WIDTH + margin.left + margin.right} ${HEIGHTp + margin.top + margin.bottom}`)
        .append("g");

    let y = d3.scaleLinear().range([HEIGHT, 0]);
    let x = d3.scaleBand().range([0, WIDTH]);

    y.domain([0,20]).nice();

    svg.append("g").call(d3.axisLeft(y));

    x.domain(data.map((data) => data.matiere));

    const text = svg
        .append("g")
        .attr("transform", `translate(0, ${HEIGHT})`)
        .call(d3.axisBottom(x));
    
    text
        .selectAll("text")
        .attr("x", x.bandwidth() / 4)
        .attr("y", 0)
        .attr("dy", ".35em")
        // it will rotate from the center point...
        .attr("transform", "rotate(90)")
        // ... but we want to rotate from the start
        .attr("text-anchor", "start")
        .attr("font-size", "14")
        .attr("font-family", "Arial")
        .attr("font-weight", "normal")
        .attr("color", "white");


    //Create Bars
    let bars = svg
        .selectAll(".bars")
        .data(data, (data) => data.matiere)
        .enter()
        .append("g")
        .attr("class", "bars")
        .style("opacity", 1)
        .style("margin-right", "100px");

    // Appending rectangles
    bars
        .append("rect")
        .attr("class", "bar")
        .attr("x", (d) => x(d.matiere))
        .attr("y", (d) => y(0))
        .attr("width", x.bandwidth()-10)
        .attr("height", 0)
        .style("fill", "steelblue")
        // Adding animation to rectangles
        .transition()
        .duration(750)
        .attr("y", (d) => y(d.note))
        .attr("height", (d) => HEIGHT - y(d.note));

    //add labels
    bars
        .append("text")
        .style("opacity", 0)
        .text((d) => d.note)
        .attr("x", (d) => x(d.matiere) + x.bandwidth() / 2)
        .attr("y", (d) => y(d.note) - 5)
        .attr("text-anchor", "middle")
        .style("font-size", "12")
        .style("color", "white")
        // Add animation to the labels
        .transition()
        .duration(500)
        .style("opacity", 1);

};

window.onload = () => {
    data = JSON.parse(data)[0]
    dataGM = JSON.parse(dataFiliere.GM)[0];
    dataGI = JSON.parse(dataFiliere.GI)[0];
    dataGEM = JSON.parse(dataFiliere.GEM)[0];
    dataIAGI = JSON.parse(dataFiliere.IAGI)[0];
    dataMSEI = JSON.parse(dataFiliere.MSEI)[0];

    newData = [];
    for (const key in data) {
        newData.push(`{"matiere" : "${key}", "note" : ${round(data[key], 2)}}`);
    }
    data = [];
    newData.forEach(object => {
        data.push(JSON.parse(object));
    });
    render(data);
    renderFiliere(dataFiliere, "GM");
}

let select = document.getElementById('filiereSelect');
select.addEventListener('change', () => {
    renderFiliere(dataFiliere, select.value);
})