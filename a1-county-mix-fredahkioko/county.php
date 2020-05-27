<?php
$county_data = array(
    array("1","Mombasa","Hassan Ali Joho","ODM"),
    array("2","Kwale","Salim Mvurya","Jubilee"),
    array("3","Kilifi","Amason Jeffah Kingi","ODM"),
    array("4","Tana River","Dhadho Godhana","ODM"),
    array("5","Lamu","Fahim Yasin Twaha","Jubilee"),
);

var_export($county_data);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Statistics</title>
        <style>
            table,
            th,
            td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
            }
        </style>
    </head>

    <body>

        <table>
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Governor</th>
                <th>Party</th>
                <th>Website</th>
            </thead>
            <tbody>
                <?php for ($i = 0;$i < count($county_data);$i++):
                    $j = 0; ?>
                <tr>
                    <td><?php echo $county_data[$i][$j]; ?></td>
                    <td><?php echo $county_data[$i][$j+1]; ?></td>
                    <td><?php echo $county_data[$i][$j+2]; ?></td>
                    <td><?php echo $county_data[$i][$j+3]; ?></td>
                    <td>
                    	<a href="http://<?php echo strtolower($county_data[$i][$j+1]) ?>.go.ke" target="_blank">
                    		http://<?php echo strtolower($county_data[$i][$j+1]) ?>.go.ke
                    	</a>
                    </td>
                </tr>
                        <?php endfor; ?>
            </tbody>
        </table>
    </body>

    </html>