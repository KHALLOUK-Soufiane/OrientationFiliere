const svgk = document.getElementById("svg1")
var margin = { top: 30, right: 50, bottom: 130, left: 30 };
const WIDTH = 1200;
const HEIGHT = 300;

const round = (number, decimalPlaces) => {
    const factorOfTen = Math.pow(10, decimalPlaces)
    return Math.round(number * factorOfTen) / factorOfTen
}

const render = data => {
    var svg = d3.select("#svg1").append("svg")
        .attr("viewBox", `0 0 ${WIDTH + margin.left + margin.right} ${HEIGHT + margin.top + margin.bottom}`)
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
    newData = [];
    for (const key in data) {
        newData.push(`{"matiere" : "${key}", "note" : ${round(data[key], 2)}}`);
    }
    data = [];
    newData.forEach(object => {
        data.push(JSON.parse(object));
    });
    console.log(data)
    render(data)
}











//     convert data to numbers
//     data.forEach(d=>{php
//         d["Analyse1"] = +d["Analyse1"]
//         d["ALGEBRE2"] = +d["ALGEBRE2"]
//         d["ALGORITHMIQUE & PROGRAMMATION"] = +d["ALGORITHMIQUE & PROGRAMMATION"]
//         d["ANALYSE 2"] = +d["ANALYSE 2"]
//         d["ANALYSE DES CIRCUITS"] = +d["ANALYSE DES CIRCUITS"]
//         d["ANALYSE NUMERIQUE"] = +d["ANALYSE NUMERIQUE"]
//         d["Algebre1"] = +d["Algebre1"]
//         d["Algebre3"] = +d["Algebre3"]
//         d["Analyse3"] = +d["Analyse3"]
//         d["BASE DE LA CONCEPTION"] = +d["BASE DE LA CONCEPTION"]
//         d["CHIMIE"] = +d["CHIMIE"]
//         d["DAO ET OUTILS DE MATLAB"] = +d["DAO ET OUTILS DE MATLAB"]
//         d["ELECTROMAGNETISME"] = +d["ELECTROMAGNETISME"]
//         d["ELECTRONIQUE"] = +d["ELECTRONIQUE"]
//         d["ELECTRONIQUE"] = +d["ELECTRONIQUE"]
//         d["Electricite"] = +d["Electricite"]
//         d["Langues"] = +d["Langues"]
//         d["MECANIQUE DU POINT"] = +d["MECANIQUE DU POINT"]
//         d["MECANIQUE DU SOLIDE"] = +d["MECANIQUE DU SOLIDE"]
//         d["METALLURGIE ET THERMOCHIMIE"] = +d["METALLURGIE ET THERMOCHIMIE"]
//         d["Moyenne API1"] = +d["Moyenne API1"]
//         d["Moyenne API2"] = +d["Moyenne API2"]
//         d["Moyenne S1"] = +d["Moyenne S1"]
//         d["Moyenne S2"] = +d["Moyenne S2"]
//         d["Moyenne S3"] = +d["Moyenne S3"]
//         d["Moyenne S4"] = +d["Moyenne S4"]
//         d["PROCEDES DE FABRICATION"] = +d["PROCEDES DE FABRICATION"]
//         d["TECHNIQUE DE DOCUMENTATION"] = +d["TECHNIQUE DE DOCUMENTATION"]
//         d["TECHNIQUES D'EXPRESSION"] = +d["TECHNIQUES D'EXPRESSION"]
//         d["TECHNIQUES D'EXPRESSION II"] = +d["TECHNIQUES D'EXPRESSION II"]
//         d["Thermodynamique"] = +d["Thermodynamique"]
//         d["id"] = +d["id"]
//     })