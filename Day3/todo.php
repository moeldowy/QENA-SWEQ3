<?php
class Todo{
    public $name;
    public $status=false;

    public function __construct($name){
        $this->name=$name;
    }
    public function done(){
        $this->status=true;
    }
}



?>
    <table border="2">
        <tr>
            <td>Id</td>
            <td>ToDO Name</td>

        </tr>
        <?php
        if(isset($_GET["todo"])){
            $todoName=$_GET["todo"];
            $obj1=new Todo($todoName);


            //$obj1->done();
            $todos=[$obj1];

        $i=0;
        foreach ($todos as $todo){
            $i++;
            ?>
          <tr>
            <td><?= $i;?></td>
            <td><?=($todo->status)?"<strike>$todo->name</strike>":$todo->name;?></td>

          </tr>
        <?php }}
        ?>
    </table>
<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
    <input type="text" name="todo"><input type="submit" value="Add">
</form>
