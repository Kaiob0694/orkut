<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: index.php');
    exit;
}

require_once __DIR__ . '/../src/conexao.php';

$sql = "SELECT * FROM livros";
$resultado = mysqli_query($conexao, $sql);

$livros = [];

while ($linha = mysqli_fetch_assoc($resultado)) {
    $livros[] = $linha;
}

function e($valor)
{
    return htmlspecialchars($valor);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>

    <link rel="stylesheet" href="assets/css/style2.css">
</head>

<body>

    <div class="container">

        <header>
            <h1>📚 Biblioteca - Cadastro de Livros</h1>

            <a class="btn btn-primary" href="cadastro_livro.php">
                + Novo Livro
            </a>
            <a class="btn btn-primary" href="logout.php">
                Sair
            </a>
        </header>

        <div class="card">
            <strong>Total de livros:</strong>
            <?php echo count($livros); ?>
        </div>

        <?php if (count($livros) === 0): ?>

            <div class="alert">
                Ainda não existem livros cadastrados.
            </div>

        <?php else: ?>

            <table>

                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>ISBN</th>
                    <th>Ano</th>
                    <th>Ações</th>
                </tr>

                <?php foreach ($livros as $l): ?>

                    <tr>

                        <td>
                            <?php echo e($l['id']); ?>
                        </td>

                        <td>
                            <?php echo e($l['titulo']); ?>
                        </td>

                        <td>
                            <?php echo e($l['autor']); ?>
                        </td>

                        <td>
                            <?php echo e($l['isbn']); ?>
                        </td>

                        <td>
                            <span class="badge badge-ano">
                                <?php echo e($l['ano']); ?>
                            </span>
                        </td>

                        <td class="acoes">

                            <a class="btn btn-primary" href="update.php?id=<?php echo $l['id']; ?>">
                                Editar
                            </a>

                            <form method="POST" action="delete.php" style="display:inline;">

                                <input type="hidden" name="id" value="<?php echo $l['id']; ?>">

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Excluir este livro?')">

                                    Excluir

                                </button>

                            </form>

                        </td>

                    </tr>

                <?php endforeach; ?>

            </table>

        <?php endif; ?>

    </div>

</body>

</html>