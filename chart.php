            <div>
                <h2>Data Kependudukan</h2>
                <!-- Elemen canvas untuk pie chart -->
                <canvas id="myPieChart" width="400" height="400"></canvas>

                <script>
                    // Mengambil konteks dari elemen canvas
                    var ctx = document.getElementById('myPieChart').getContext('2d');

                    // Data untuk pie chart
                    var data = {
                        labels: ['Populasi penduduk', 'Luas Kabupaten', 'data1', 'data2', 'data3'],
                        datasets: [{
                            label: 'URBAN SETTLEMENT (%)',
                            data: [30, 25, 20, 15, 10],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)'
                            ],
                            borderWidth: 1
                        }]
                    };

                    // Opsi untuk pie chart
                    var options = {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'top',
                            },
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var label = context.label || '';
                                        if (label) {
                                            label += ': ';
                                        }
                                        label += context.raw + '%';
                                        return label;
                                    }
                                }
                            }
                        }
                    };

                    // Membuat pie chart baru
                    var myPieChart = new Chart(ctx, {
                        type: 'pie',
                        data: data,
                        options: options
                    });
                </script>

            </div>