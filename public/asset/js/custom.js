$(document).ready(function () {

    // Table
	$('#example').DataTable({
        responsive: true,
    });


    // Search
    $('.txtsearch').click(function (event) {
        event.stopPropagation();
        $('.searchbar').addClass('searchbar-width');
    });

    $(document).click(function () {
        $('.searchbar').removeClass('searchbar-width');
    });

    

    // // Bar Chart
    // var data = {
    //   labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
    //   datasets: [{
    //     label: "",
    //     backgroundColor: ["#fe7811","#f44336","#009688","#e91e63","#ffc107","#00bcd4","#795548","#673ab7","#ff5722","#607d8b","#9e9e9e","#3f51b5",],
    //     hoverBackgroundColor: "rgba(255,99,132,0.4)",
    //     hoverBorderColor: "rgba(255,99,132,1)",
    //     data: [65, 59, 20, 81, 56, 55, 40, 59, 20, 81, 56, 55],
    //   }]
    // };

    // var options = {
    //             barThickness: 23,

    //   maintainAspectRatio: false,
    //   responsive: true,
    //   plugins: {
    //     legend: {
    //       display: false
    //     }
    //   },
    //   scales: {
    //     y: {
    //       stacked: true,
    //       grid: {
    //         display: true,
    //         color: "rgba(255,99,132,0.2)"
    //       }
    //     },
    //     x: {
    //       grid: {
    //         display: false
    //       }
    //     },
    //   },
     
    // };

    // new Chart('barchart', {
    //   type: 'bar',
    //   options: options,
    //   data: data
    // });



    // Doughnut Chart
   const percent1 = 84;
   const percent2 = 60;
   const percent3 = 40;

   const color1 = '#fe7811';
   const color2 = '#4285f4';
   const color3 = '#34a853';

   const container1 = 'chartContainer';
   const container2 = 'chartContainer2';
   const container3 = 'chartContainer3';

   createDoughnutChart(container1, 'chartCanvas', percent1, color1, 'New User');
   createDoughnutChart(container2, 'chartCanvas2', percent2, color2, 'Purchase');
   createDoughnutChart(container3, 'chartCanvas3', percent3, color3, 'Pending');

   function createDoughnutChart(container, canvas, percent, color, label) {
        const chartCanvas = document.getElementById(canvas);
        const chartContainer = document.getElementById(container);
        const divElement = document.createElement('div');
        const labelElement = document.createElement('div');

        const domString = `<div class="chart__value"><p>${percent}%</p></div>`;
        const labelString = `<div class="chart__label">${label}</div>`;

        const doughnutChartData = {
          labels: ['Value', 'Remaining'],
          datasets: [{
            data: [percent, 100 - percent],
            backgroundColor: [color, '#f8f9fa'],
            borderWidth: 0,
          }]
        };

        const doughnutChartOptions = {
          cutout: '90%',
          responsive: false,
          plugins: {
            legend: {
              display: false,
            },
            tooltip: {
              enabled: false,
            },
          },
        };

        Chart.defaults.animation.duration = '1400';

        const doughnutChart = new Chart(chartCanvas, {
          type: 'doughnut',
          data: doughnutChartData,
          options: doughnutChartOptions,
        });

        divElement.innerHTML = domString;
        labelElement.innerHTML = labelString;

        chartContainer.appendChild(divElement.firstChild);
        chartContainer.appendChild(labelElement);
    }


    // Swal.fire({
    //   title: "Are you sure you want to Delete?",
    //   text: "You won't be able to revert this!",
    //   icon: "warning",
    //   showCancelButton: true,
    //   confirmButtonColor: "#3085d6",
    //   cancelButtonColor: "#d33",
    //   confirmButtonText: "Yes, delete it!"
    // }).then((result) => {
    //   if (result.isConfirmed) {
    //     Swal.fire({
    //       title: "Deleted!",
    //       text: "Your file has been deleted.",
    //       icon: "success"
    //     });
    //   }
    // });

  
    
});

