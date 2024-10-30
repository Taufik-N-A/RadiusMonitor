const apiUrl='./api/daily_user.php';fetch(apiUrl).then(response=>response.json()).then(data=>{console.log(data);var ctx=document.getElementById('chart-bars').getContext('2d');function getGradient(ctx,chartArea){var gradient=ctx.createLinearGradient(0,chartArea.top,0,chartArea.bottom);gradient.addColorStop(0,'rgba(54, 162, 235, 1)');gradient.addColorStop(1,'rgba(54, 162, 235, 0)');return gradient}
var myCustomersChart=new Chart(ctx,{type:'line',data:{labels:data.labels,datasets:[{data:data.data,tension:0.4,backgroundColor:function(context){var chart=context.chart;var ctx=chart.ctx;var chartArea=chart.chartArea;if(!chartArea){return null}
return getGradient(ctx,chartArea)},borderColor:'rgba(54, 162, 235, 1)',borderWidth:2,fill:!0}]},options:{scales:{y:{display:!0},x:{display:!0}},elements:{point:{radius:1}},plugins:{legend:{display:!1,},title:{display:!1,text:['Daily Login'],align:'center',color:'#fff',font:{size:16,family:'Inter',weight:'600',lineHeight:1.4},padding:{top:20}}},maintainAspectRatio:!1}})}).catch(error=>{console.error('Error fetching chart data:',error)})