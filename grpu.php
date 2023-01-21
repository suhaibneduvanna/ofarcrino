<?php
require_once 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>

    <style>
        .content {
            display: flex;
            justify-content: space-around;
            align-items: center;


        }

        .value {
            font-size: 100px;
            display: block;
            font-weight: bold;

        }
    </style>
    <div class="page-content page-container mt-5" id="page-content">
        <div class="padding">
            <div class="row">
                <div class="container-fluid  d-flex justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <div class="card">
                            <div class="card-header text-dark">
                                <h1 class="text-center">Group Wise Result</h1>
                            </div>
                            <div class="card-body" style="height: 100%">
                                <div class="content">
                                    <h1 style="color: #77101f;" id="counter1" class="value">0</h1>
                                    <h1 style="color: #672366;" id="counter2" class="value">0</h1>
                                    <h1 style="color: #037866;" id="counter3" class="value">0</h1>

                                </div>
                                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                                    <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
                                        </div>
                                    </div>
                                    <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                                    </div>
                                </div> <canvas id="chart-line" width="299" height="200" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-firestore.js"></script>

    <script>
        // Your web app's Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAJf7ghbO3hFVDw-FQcj78886LhWJP0psg",
            authDomain: "ofarc-580e4.firebaseapp.com",
            projectId: "ofarc-580e4",
            storageBucket: "ofarc-580e4.appspot.com",
            messagingSenderId: "392416314916",
            appId: "1:392416314916:web:66eceb55a9246e82e0bab1"
        };

        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);

        let db = firebase.firestore();

        db.collection("results").onSnapshot(async (snapshot) => {
            let data;
            await snapshot.docChanges().forEach((change) => {

                if (change.type === "added") {
                    data = change.doc.data();
                    console.log("Added city: ", change.doc.data());

                }

                if (change.type === "modified") {
                    data = change.doc.data();
                    console.log("Modified city: ", change.doc.data());

                }

                let counts1 = setInterval(update1);
                let counts2 = setInterval(update2);
                let counts3 = setInterval(update3);

                let upto1 = 0;
                let upto2 = 0;
                let upto3 = 0;


                function update1() {
                    var count1 = document.getElementById("counter1");
                    count1.innerHTML = ++upto1;
                    if (upto1 === parseInt(data.Arabesque)) {
                        clearInterval(counts1);
                    }



                }

                function update2() {
                    var count2 = document.getElementById("counter2");
                    count2.innerHTML = ++upto2;
                    if (upto2 === parseInt(data.Baroque)) {
                        clearInterval(counts2);
                    }

                }

                function update3() {
                    var count3 = document.getElementById("counter3");

                    count3.innerHTML = ++upto3;
                    if (upto3 === parseInt(data.Romanesque)) {
                        clearInterval(counts3);
                    }
                }

                var ctx = $("#chart-line");

                const chart_data = {
                    labels: ["Arabesque", "Baroque", "Romanesque"],
                    datasets: [{
                        label: 'Group Wise Result',
                        data: [parseInt(data.Arabesque), parseInt(data.Baroque), parseInt(data.Romanesque)],
                        backgroundColor: [
                            "#77101f", "#672366", "#037866"

                        ],
                        borderColor: [
                            "#77101f", "#672366", "#037866"
                        ],
                        borderWidth: 1
                    }]
                };
                const config = {
                    type: 'bar',
                    data: chart_data,
                    options: {
                        title: {
                            text: "Result",
                            display: false


                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.yLabel;
                                }
                            }
                        }
                    }
                };
                var myLineChart = new Chart(ctx, config);




            })

        });

        // $(document).ready(function() {
        //     let fetchRes = fetch(
        //         "fetch_group_results.php");
        //     // fetchRes is the promise to resolve
        //     // it by using.then() method
        //     fetchRes.then(res =>
        //         res.json()).then(result_array => {

        //         var ctx = $("#chart-line");
        //         var myLineChart = new Chart(ctx, {
        //             type: 'doughnut',
        //             data: {
        //                 labels: ["Arabesque", "Baroque", "Romenesque"],
        //                 datasets: [{
        //                     data: [parseInt(result_array[1]), parseInt(result_array[2]), parseInt(result_array[0])],
        //                     backgroundColor: ["rgba(255, 0, 0, 0.5)", "rgba(100, 255, 0, 0.5)", "rgba(200, 50, 255, 0.5)", "rgba(0, 100, 255, 0.5)"]
        //                 }],

        //             },
        //             options: {
        //                 title: {
        //                     display: false,
        //                     text: 'Results'
        //                 },

        //             },


        //         });


        //         const counters = document.querySelectorAll('.value');
        //         const speed = 2;
        //         document.getElementById('count1').setAttribute('akhi', result_array[1])
        //         document.getElementById('count2').setAttribute('akhi', result_array[2])
        //         document.getElementById('count3').setAttribute('akhi', result_array[0])

        //         counters.forEach(counter => {
        //             const animate = () => {
        //                 const value = +counter.getAttribute('akhi');
        //                 const data = +counter.innerText;

        //                 const time = value / speed;
        //                 if (data < value) {
        //                     counter.innerText = Math.ceil(data + time);
        //                     setTimeout(animate, 1);
        //                 } else {
        //                     counter.innerText = value;
        //                 }

        //             }

        //             animate();
        //         });
        //     })

        // });
    </script>
</body>

</html>