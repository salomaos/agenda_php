<?php
require_once "classes/crud.php";

class contatoDAO extends CRUD
{
    protected $tabela = "contatos";

    public function insert()
    {
        $sql = "INSERT INTO $this->tabela (nome, apelido, email, dtnasc, whatsapp, id_usuario) VALUES (:nome, :apelido, :email, :nascimento, :whatsapp, :idUsuario)";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $this->GetNome());
        $stmt->bindValue(':email', $this->GetEmail());
        $stmt->bindValue(':apelido', $this->GetApelido());
        $stmt->bindValue(':nascimento', $this->GetNascimento());
        $stmt->bindValue(':whatsapp', $this->GetWhatsapp());
        $stmt->bindValue(':idUsuario', $this->GetIdUsuario());
        $stmt->execute();
        return $this->insertTelefones($this->GetEmail());
    }

    public function insertTelefones($email)
    {
        $id = $this->findContatoByEmail($email)->id;
        foreach ($this->GetTelefone() as $tel) {
            $values .= "(" . $id . ", " . $tel . "),";
        }
        $values = substr($values, 0, -1);
        $sql = "INSERT INTO telefones (id_contato, telefone) VALUES " . $values . ";";
        $stmt = DB::prepare($sql);
        return $stmt->execute();
    }

    public function findTelefones($idUsuario)
    {
        $sql  = "SELECT * FROM telefones WHERE id_contato = $idUsuario";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function updateTelefones($email)
    {
        $id = $this->findContatoByEmail($email)->id;
        #foreach ($this->GetTelefone() as $tel) {
            #$values .= "(" . $id . ", " . $tel . "),";
        #}
        #$values = substr($values, 0, -1);
        $sql = "DELETE FROM telefones WHERE id_contato = $id;";
        foreach ($this->GetTelefone() as $tel) {
            $sql .= "INSERT INTO telefones (id_contato, telefone) VALUES ($id, $tel);";
            #$values .= "(" . $id . ", " . $tel . "),";
        }
        #$sql .= "INSERT INTO telefones (id_contato, telefone) VALUES " . $values . ";";
        $stmt = DB::prepare($sql);
        return $stmt->execute();
    }

    public function update($id)
    {
        $sql = "UPDATE $this->tabela SET nome=:nome, apelido=:apelido, dtnasc=:nascimento, email=:email, whatsapp=:whatsapp WHERE email=:email";
        $stmt = DB::prepare($sql);
        $stmt->bindValue(':nome', $this->GetNome());       
        $stmt->bindValue(':apelido', $this->GetApelido());
        $stmt->bindValue(':nascimento', $this->GetNascimento());
        $stmt->bindValue(':email', $this->GetEmail());        
        $stmt->bindValue(':whatsapp', $this->GetWhatsapp());
        return $stmt->execute();
    }

    public function findContatos($idUsuario)
    {
        $sql  = "SELECT * FROM $this->tabela WHERE id_usuario = $idUsuario";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function findContatoByEmail($email)
    {
        $sql = "SELECT * FROM $this->tabela WHERE email LIKE :email";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function aniversariantes($idUsuario)
    {       
        $sql = "SELECT extract(MONTH FROM dtnasc) as mes, COUNT(id) as quantidade FROM contatos WHERE id_usuario = $idUsuario GROUP BY extract(month from dtnasc)";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function deleteContato($idUsuario)
    {
        $sql = "DELETE FROM telefones WHERE id_contato = :idUsuario;";
        $sql .= "DELETE FROM $this->tabela WHERE id = :idUsuario;";
        $stmt = DB::prepare($sql);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        $stmt->bindParam(':idUsuario', $idUsuario, PDO::PARAM_INT);
        return $stmt->execute();
        # return $stmt->fetchAll();
    }
}
