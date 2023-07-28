document.addEventListener("DOMContentLoaded", function(event) {
   
    const showNavbar = (toggleId, navId, bodyId, headerId) =>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId),
    bodypd = document.getElementById(bodyId),
    headerpd = document.getElementById(headerId)
    
    // Validate that all variables exist
    if(toggle && nav && bodypd && headerpd){
    toggle.addEventListener('click', ()=>{
    // show navbar
    nav.classList.toggle('show')
    // change icon
    toggle.classList.toggle('bx-x')
    // add padding to body
    bodypd.classList.toggle('body-pd')
    // add padding to header
    headerpd.classList.toggle('body-pd')
    })
    }
    }
    
    showNavbar('header-toggle','nav-bar','body-pd','header')
    
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')
    
    function colorLink(){
    if(linkColor){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))
    
     // Your code to run since DOM is loaded and ready
    });

    // -------charts-------

    var options = {
        series: [{
        data: [100, 50, 30, 10]
      }],
        chart: {
        type: 'bar',
        height: 350
      },
      plotOptions: {
        bar: {
          borderRadius: 4,
          horizontal: true,
        }
      },
      dataLabels: {
        enabled: false
      },
      xaxis: {
        categories: ['books','king','bks','olk'
        ],
      }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();



    //   chart---

    
      
    var options = {
        series: [{
        name: "STOCK ABC",
        data: series.monthDataSeries1.prices
      }],
        chart: {
        type: 'area',
        height: 350,
        zoom: {
          enabled: false
        }
      },
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'straight'
      },
      
      title: {
        text: 'Fundamental Analysis of Stocks',
        align: 'left'
      },
      subtitle: {
        text: 'Price Movements',
        align: 'left'
      },
      labels: series.monthDataSeries1.dates,
      xaxis: {
        type: 'datetime',
      },
      yaxis: {
        opposite: true
      },
      legend: {
        horizontalAlign: 'left'
      }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();