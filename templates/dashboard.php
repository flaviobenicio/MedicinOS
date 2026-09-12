<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Painel Clínico</title>
    <!-- Substitua pelo caminho real do seu base.css -->
    <link rel="stylesheet" href="../assets/css/base.css">
    <!-- Chart.js via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2>Reencontro</h2>
            </div>
            <nav class="sidebar-nav">
                <ul>
                    <li><a href="#" class="active">Visão Geral</a></li>
                    <li><a href="#">Agenda</a></li>
                    <li><a href="#">Pacientes</a></li>
                    <li><a href="#">Relatórios</a></li>
                    <li><a href="#">Configurações</a></li>
                </ul>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <header class="top-header">
                <h1>Dashboard</h1>
                <div class="user-info">Administrador</div>
            </header>

            <!-- 4 KPI Cards -->
            <section class="kpi-grid">
                <div class="kpi-card">
                    <h3>Consultas Hoje</h3>
                    <span class="kpi-value">14</span>
                </div>
                <div class="kpi-card">
                    <h3>Novos Pacientes (Mês)</h3>
                    <span class="kpi-value">8</span>
                </div>
                <div class="kpi-card">
                    <h3>Taxa de Retorno</h3>
                    <span class="kpi-value">85%</span>
                </div>
                <div class="kpi-card">
                    <h3>Atendimentos Pendentes</h3>
                    <span class="kpi-value">3</span>
                </div>
            </section>

            <!-- Gráfico e Tabela -->
            <section class="dashboard-widgets">
                
                <!-- Gráfico de Barras -->
                <div class="widget chart-container">
                    <h3>Volume de Atendimentos (Semana)</h3>
                    <!-- A div wrapper ajuda a controlar o tamanho do Chart.js -->
                    <div style="position: relative; height: 300px; width: 100%;">
                        <canvas id="barChart"></canvas>
                    </div>
                </div>

                <!-- Tabela de Próximas Consultas -->
                <div class="widget table-container">
                    <h3>Próximas Consultas</h3>
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th>Paciente</th>
                                <th>Horário</th>
                                <th>Profissional</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Marina Silva</td>
                                <td>Hoje, 14:00</td>
                                <td>Dr. Carlos</td>
                                <td><span class="status-badge confirmed">Confirmada</span></td>
                            </tr>
                            <tr>
                                <td>Roberto Almeida</td>
                                <td>Hoje, 15:30</td>
                                <td>Dra. Fernanda</td>
                                <td><span class="status-badge waiting">Aguardando</span></td>
                            </tr>
                            <tr>
                                <td>Camila Souza</td>
                                <td>Amanhã, 09:00</td>
                                <td>Dr. Carlos</td>
                                <td><span class="status-badge confirmed">Confirmada</span></td>
                            </tr>
                            <tr>
                                <td>Felipe Costa</td>
                                <td>Amanhã, 10:15</td>
                                <td>Dra. Fernanda</td>
                                <td><span class="status-badge canceled">Cancelada</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </section>
        </main>
    </div>

    <!-- Script de inicialização do Gráfico (Mock) -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const ctx = document.getElementById('barChart').getContext('2d');
            
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
                    datasets: [{
                        label: 'Consultas Realizadas',
                        data: [12, 19, 15, 22, 18, 6],
                        // Ajuste os hexadecimais abaixo para o azul e laranja exatos da sua identidade visual
                        backgroundColor: '#1E90FF', 
                        hoverBackgroundColor: '#FF8C00',
                        borderRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 5
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
