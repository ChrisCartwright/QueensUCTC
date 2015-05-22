<?php

class Entry
{
  public $id = null;
  public $firstName = null;
  public $lastName = null;
  public $program = null;
  public $year = null;
  public $email = null;
  public $skills = null;
  public $project = null;

  public function __construct( $data=array() ) {

    if ( isset( $data['id'] ) ) $this->id = (int) $data['id'];
    if ( isset( $data['firstName'] ) ) $this->firstName = $data['firstName'];
    if ( isset( $data['lastName'] ) ) $this->lastName = $data['lastName'];
    if ( isset( $data['program'] ) ) $this->program = $data['program'];
    if ( isset( $data['year'] ) ) $this->year = $data['year'];
    if ( isset( $data['email'] ) ) $this->email = $data['email'];
    if ( isset( $data['skills'] ) ) $this->skills = $data['skills'];
      if ( isset( $data['project'] ) ) $this->project = $data['project'];

  }

  public function storeFormValues ( $params ) {
    $this->__construct( $params );
  }

  public static function getById( $id ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT * FROM entries WHERE id = :id";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":id", $id, PDO::PARAM_INT );
    $st->execute();
    $row = $st->fetch();
    $conn = null;
    if ( $row ) return new Entry( $row );
  }

  public static function getNames( $numRows=1000000 ) {
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "SELECT firstName, lastName FROM entries";
    $st = $conn->prepare( $sql );
    $st->bindValue( ":numRows", $numRows, PDO::PARAM_INT );
    $st->execute();
    $list = array();

    while ( $row = $st->fetch() ) {
      $entry = new Entry( $row );
      $list[] = $entry;
    }

    $sql = "SELECT FOUND_ROWS() AS totalRows";
    $totalRows = $conn->query( $sql )->fetch();
    $conn = null;
    return ( array ( "results" => $list, "totalRows" => $totalRows[0] ) );
  }

  public function insert() {

    if ( !is_null( $this->id ) ) trigger_error ( "Article::insert(): Attempt to insert an Article object that already has its ID property set (to $this->id).", E_USER_ERROR );

    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "INSERT INTO entries ( firstName, lastName, program, year, email, skills, project ) VALUES ( :firstName, :lastName, :program, :year, :email, :skills, :project )";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":firstName", $this->firstName, PDO::PARAM_STR );
    $st->bindValue( ":project", $this->project, PDO::PARAM_INT );
    $st->bindValue( ":lastName", $this->lastName, PDO::PARAM_STR );
    $st->bindValue( ":program", $this->program, PDO::PARAM_STR );
    $st->bindValue( ":year", $this->year, PDO::PARAM_INT );
    $st->bindValue( ":email", $this->email, PDO::PARAM_STR );
    $st->bindValue( ":skills", $this->skills, PDO::PARAM_STR );
    $st->execute();
    $this->id = $conn->lastInsertId();
    $conn = null;
  }


  public function update() {

    if ( is_null( $this->id ) ) trigger_error ( "Article::update(): Attempt to update an Article object that does not have its ID property set.", E_USER_ERROR );
   
    // Update the Article
    $conn = new PDO( DB_DSN, DB_USERNAME, DB_PASSWORD );
    $sql = "UPDATE entries SET firstName=:firstName, lastName=:lastName, program=:program, year=:year, email=:email, skills=:skills WHERE id = :id";
    $st = $conn->prepare ( $sql );
    $st->bindValue( ":firstName", $this->firstName, PDO::PARAM_STR );
    $st->bindValue( ":lastName", $this->lastName, PDO::PARAM_STR );
    $st->bindValue( ":program", $this->program, PDO::PARAM_STR );
    $st->bindValue( ":year", $this->year, PDO::PARAM_STR );
    $st->bindValue( ":email", $this->email, PDO::PARAM_STR );
    $st->bindValue( ":skills", $this->skills, PDO::PARAM_STR );
    $st->bindValue( ":id", $this->id, PDO::PARAM_INT );
    $st->execute();
    $conn = null;
  }
}

?>
