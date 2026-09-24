<?php
ob_start();

include "../config.php";
include DBAPI;

$laptop = null;
$laptops = null;

/**
 * Formatar Datas
 */
function formatdata($data, $formato) {
  $dt = new DateTime($data, new DateTimeZone("America/Sao_Paulo"));
  return $dt->format($formato);
}

/**
 * Formatar Telefones
 */
function telefone($tel) {
  return "(" . substr($tel, 0, 2) . ")" . substr($tel, 2, 5) . "-" . substr($tel, 7, 4);
}

function celular($tel) {
  return "(" . substr($tel, 0, 2) . ") " . substr($tel, 2, 5) . "-" . substr($tel, 7, 4);
}

/**
 * Formatar CEP
 */
function cep($cep) {
  return substr($cep, 0, 5) . "." . substr($cep, 5, 3);
}

/**
 * Listagem de Laptops
 */
function index() {
  global $laptops;
  $laptops = find("laptops");
}

/**
 * Visualização de um Laptop
 */
function view($id = null) {
  global $laptop;
  $laptop = find('laptops', $id);
}

/**
 * Cadastro de Laptop
 */
function add() {
  if (!empty($_POST['laptop'])) {
    $today = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
    $laptop = $_POST['laptop'];
    $laptop['modified'] = $laptop['created'] = $today->format("Y-m-d H:i:s");
    
    save('laptops', $laptop);
    header('location: index.php');
    exit();
  }
}

/**
 * Insere um registro na tabela
 */
function save($table = null, $data = null) {
  $database = open_database();

  $columns = null;
  $values = null;

  foreach ($data as $key => $value) {
    $columns .= trim($key, "'") . ",";
    $values .= "'$value',";
  }

  // Remove a última vírgula
  $columns = rtrim($columns, ',');
  $values = rtrim($values, ',');
  
  $sql = "INSERT INTO $table ($columns) VALUES ($values);";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro cadastrado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
    $_SESSION['message'] = 'Não foi possível realizar a operação.<br>' . $e->getMessage();
    $_SESSION['type'] = 'danger';
  } 

  close_database($database);
}

/**
 * Atualização/Edição de Laptop
 */
function edit() {
  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if (isset($_POST['laptop'])) {
      $laptop = $_POST['laptop'];
      $laptop['modified'] = $now->format("Y-m-d H:i:s");

      update("laptops", $id, $laptop);
      header("location: index.php");
      exit();
    } else {
      global $laptop;
      $laptop = find("laptops", $id);
    } 
  } else {
    header('location: index.php');
    exit();
  }
}

/**
 * Atualiza um registro em uma tabela por ID
 */
function update($table = null, $id = 0, $data = null) {
  $database = open_database();

  $items = null;

  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }

  // Remove a última vírgula
  $items = rtrim($items, ',');

  $sql = "UPDATE $table SET $items WHERE id=" . intval($id) . ";";

  try {
    $database->query($sql);

    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';
  
  } catch (Exception $e) { 
    $_SESSION['message'] = 'Não foi possível realizar a operação.<br>' . $e->getMessage();
    $_SESSION['type'] = 'danger';
  } 

  close_database($database);
}

/**
 * Exclusão de Laptop
 */
function delete($id = null) {
  global $laptop;
  $laptop = remove('laptops', $id);

  header('location: index.php');
}

function remove($table = null, $id = null) {
  $database = open_database();
  
  try {
    if ($id) {
      $sql = "DELETE FROM $table WHERE id = $id";
      $result = $database->query($sql);

      if ($result) {    
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) { 
    $_SESSION['message'] = "Não foi possível realizar a operação.<br>" . $e->getMessage();
    $_SESSION['type'] = "danger";
  }

  close_database($database);
}