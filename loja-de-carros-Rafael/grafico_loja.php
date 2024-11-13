<?php
// Incluindo o arquivo de conexão com o banco de dados
include 'php_action/db_connect.php'; // Ajuste o caminho, se necessário
include 'includes/header.php';

// Verificar se a conexão foi bem-sucedida
if (!$connect) { // Corrigir para usar a variável $connect, que foi definida no db_connect.php
    die("Connection failed: " . mysqli_connect_error());
}

// Consultar dados da tabela `estoque`
$query = "SELECT marca, modelo, valor, mod_fab FROM estoque";
$result = mysqli_query($connect, $query); // Usar $connect aqui também

// Verificar se a consulta foi bem-sucedida
if (!$result) {
    die("Query failed: " . mysqli_error($connect)); // Usar $connect para a conexão
}

// Criando arrays para o gráfico
$marcas = [];
$modelos = [];
$valores = [];
$anos = [];

while ($row = mysqli_fetch_assoc($result)) {
    $marcas[] = $row['marca'];
    $modelos[] = $row['modelo'];
    $valores[] = $row['valor'];
    $anos[] = $row['mod_fab'];
}

// Fechar a conexão com o banco de dados
mysqli_close($connect); // Fechar usando $connect
?>

<div class="container">
    <h3 class="center">Gráfico de Carros - Carros da Loja</h3>
    <canvas id="carChart" width="400" height="200"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Corrigir a tag <script> -->
<script>
    // Passando os dados do PHP para o JavaScript
    const marcas = <?php echo json_encode($marcas); ?>;
    const modelos = <?php echo json_encode($modelos); ?>;
    const valores = <?php echo json_encode($valores); ?>;
    const anos = <?php echo json_encode($anos); ?>;

    // Verificar os dados no console
    console.log(marcas, modelos, valores, anos);

    // Criando o gráfico
    const ctx = document.getElementById('carChart').getContext('2d');
    const carChart = new Chart(ctx, {
        type: 'bar',  // Tipo de gráfico (barras)
        data: {
            labels: marcas, // Marcas como rótulos
            datasets: [{
                label: 'Preço dos Carros',
                data: valores, // Dados de preço dos carros
                backgroundColor: 'rgba(75, 192, 192, 0.5)', // Cor do gráfico
                borderColor: 'rgba(75, 192, 192, 1)', // Cor da borda
                borderWidth: 1
            }, {
                label: 'Ano de Fabricação',
                data: anos, // Dados do ano de fabricação
                backgroundColor: 'rgba(153, 102, 255, 0.5)', // Cor do gráfico
                borderColor: 'rgba(153, 102, 255, 1)', // Cor da borda
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,  // Gráfico responsivo
            scales: {
                y: {
                    beginAtZero: true  // Começar o eixo Y em 0
                }
            }
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
