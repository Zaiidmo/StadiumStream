const xValues = ['Monday',60,70,80,90,100,110,120,130,140,150];
const yValues = [10,8,5,9,10,17,3,11,7,14,1];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      // backgroundColor:"rgba(0,75,50,1.0)",
      borderColor: "rgba(255,110,0,0.5)",
      data: yValues
    }]
  },
  options:{tickets}
});