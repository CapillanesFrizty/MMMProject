
$(document).ready(() => {
    getreport();
    async function getreport() {
        const response = await fetch('graph.php');
        const data = await response.json();
        console.log(data);
        length = data.length; 
        labels = [];
        values = [];
        for (i = 0; i < length; i++) {
           labels.push(data[i].modelname);
           values.push(data[i].modelsales);
        }

        new Chart(document.getElementById("myChart2"), {
            type: 'bar',
            data: {
               labels: labels,
               datasets: [
                  {
                     label: "Car Models",
                     backgroundColor: ["#025464",
                        "#E57C23",
                        "#E8AA42",
                        "#F8F1F1",
                        "#7E1717",
                        "#CD9C5C",
                        "#40E0D0"],
                     data: values,
                     borderWidth: 1,
                     fill: false,
                  }
               ]
            },
            options: {
               legend: { display: false},
               title: {
                  display: true,
                  text: ''
               },
               elements: {
                line: {
                  borderWidth: 3
                }
              }

            }
        })
    }
})