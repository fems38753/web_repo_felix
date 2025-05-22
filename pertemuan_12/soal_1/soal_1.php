<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>soal_1</title>
</head>
<style>
        table {
            border-collapse: collapse;
            width: 400px;
            font-family: 'Times New Roman', Times, serif;
        }
        th {
            background-color: #ccc;
            font-size: 20px;
            padding: 10px;
            text-align: center;
        }
        td {
            padding: 8px;
        }
        input[type=text], input[type=password], select {
            width: 100%;
            box-sizing: border-box;
        }
        input[type=reset], input[type=submit] {
            padding: 5px 15px;
            margin: 5px;
        }
        .myname {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 1px;
            font-size: 8px;
            font-family:monospace;
        }
    </style>
</head>
<body>
    <form action="result_1.php" method="POST">
        <table border="1">
            <tr><th colspan="2">ADD PROFILE</th></tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>Position</td>
                <td>
                    <select name="position">
                        <optgroup label="Programmer">
                            <option value="Senior Programmer" selected>Senior Programmer</option>
                            <option value="Junior Programmer">Junior Programmer</option>
                        </optgroup>
                        <optgroup label="System Analyst">
                            <option value="Senior Analyst">Senior Analyst</option>
                            <option value="Junior Analyst">Junior Analyst</option>
                        </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" /></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="confirm_password" /></td>
            </tr>
            <tr>
                <td colspan="2" align="Right">
                    <input type="reset" value="Reset" />
                    <input type="submit" value="Save" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<div class="myname">
    <p>[2373012] - [Felix Marcelino]©</p>
</div>