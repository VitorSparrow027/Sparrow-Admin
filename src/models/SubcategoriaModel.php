<?php
require_once realpath(dirname(__FILE__, 2) . '/config/config.php');
class SubCategoriaModel
{
  public static function listarSubCategorias()
  {
    $conexao = Database::getConection();
    $sql = "SELECT s.id_subcategoria as id, s.nome as subcategoria, c.nome as categoria FROM subcategorias as s JOIN categorias c ON c.id_categoria = s.id_categoria";


    $resultado = $conexao->query($sql) or die("Erro ao listar as SubCategorias") . mysql_error();

    if ($resultado) {
      return $resultado;
    } else {
      return false;
    }
  }
  public function incluir($dados)
  {
    $conexao = Database::getConection();

    $nome = $dados['inputNomeSubCategorias'];
    $novo = $conexao->prepare("INSERT INTO SubCategorias (nome, categoria_id) VALUES (?,?)");

    $novo->bind_param('s', $nome);
    $novo->execute();

    if ($novo->affected_rows > 0) {
      //$id = mysqli_stmt_insert_id($novo);
      //return $id;
      header("Location: SubCategorias.php");
    } else {
      return "Erro ao gravar no banco de dados";
    }
  }
  public function update()
  { }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $SubCategorias = new SubCategoriasModel;
  $ACAO = $_POST['acao'];

  if ($ACAO == "insert") {
    print_r('entrou no insert');
    $SubCategorias->incluir($_POST);
  } elseif ($ACAO == 'update') {
    print_r('entrou no update');
    $SubCategorias->update();
  }
}