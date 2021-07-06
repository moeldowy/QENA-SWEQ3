<?php
session_start();
//require_once "Todolist.php";
class Todolist
{

    public $name;
    public $status=false;

    public function __construct($name){
        $this->name=$name;
    }
    public function done(){
        $this->status=true;
    }

}
if(isset($_SESSION["username"])){
    ?>

    <table border="2">
        <tr>
            <td>Id</td>
            <td>ToDO Name</td>
            <td>status</td>
        </tr>
        <?php
        if(isset($_GET["todo"])){
            $todoName=$_GET["todo"];
            $obj=new Todolist($todoName);
            //$obj1->done();
            $_SESSION["todo"][]=$obj;
            $todos=$_SESSION["todo"];
            $i=0;
            $todos[1]->done();
            foreach ($todos as $todo){
                $i++;
                ?>
                <tr>
                    <td><?= $i;?></td>
                    <td><?=($todo->status)?"<strike>$todo->name</strike>":$todo->name;?></td>
                    <td><button href="">Done</button></td>
                </tr>
            <?php }}
        ?>
    </table>
    <form method="get" action="<?=$_SERVER['PHP_SELF']?>">
        <input type="text" name="todo"><input type="submit" value="Add">
    </form>
    <a href="logoutcode.php">Logout</a>
    <?php
}else{
    echo "You are Not Authorized to see That Page";
    header("Refresh: 3;URL=index.php");
}
?>


