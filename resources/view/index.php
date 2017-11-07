
/**
 * Created by IntelliJ IDEA.
 * User: vince
 * Date: 03/10/2017
 * Time: 17:00
 */

<html>
    <body>
    <h1>Forum</h1>
    <form action="forum/add" method="post">
        Ajouter un forum : <input type="text" name="title" /><input type="submit" value="Ajouter" />
    </form>

    <h2>Listes des forums</h2>
    <ul>
        <?php foreach($forums as $forum){ ?>
        <li><?php echo $forum->getTitle()?>
            <?php } ?>
    </ul>
    </body>
</html>


