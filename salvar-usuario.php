<?php
    switch ($_REQUEST["acao"]){
        case 'cadastrar':
            //cadastro de usuario
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO  usuarios (nome, email, senha, data_nasc) VALUES (
                '{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";

            $res = $conn->query($sql);
                
            if($res==true){
                print "<script>alert('Usuário cadastrado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar o cadastro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET
                        nome='{$nome}',
                        email='{$email}',
                        senha='{$senha}',
                        data_nasc='{$data_nasc}'
                    WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
                
            if($res==true){
                print "<script>alert('Usuário atualizado');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar a atualização do usuário');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
        
        case 'excluir':
            
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);
                
            if($res==true){
                print "<script>alert('Usuário excluído');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel excluir o usuário');</script>";
                print "<script>location.href='?page=listar';</script>";
            }

            break;
    }