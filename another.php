<?php
$x = 2;
switch ($x) {
    case 1:
        print("hello world");
        break;
    case 2:
        print("maybe world");
        break;
    case 3:
        print("bye world");
        break;
    default:
        print("gooaaal!!");
        break;
}
$x = ['mango', 'orange', 'pawpaw'];
foreach ($x as $item) {
    echo "<br>" . $item;
}


?>
<!-- <script>
    let x = ["mango", "orange", "pawpaw"];
    x.forEach((item) => {
        console.log(item);
    })
</script> -->

<?php
$x = ['mango', 'orange', 'pawpaw'];
foreach ($x as $item) {
    if($item == 'orange') {
        break;
    }
    echo "<br>" . $item;
}
// u can also use continue function in place of break statement

function doSomething($name){
    echo "hello world";
}
doSomething($name);


?>