<?php
$validation_errors = [];

function validate($data)
{
    global $validation_errors;
    if (empty($_POST['name']) & !preg_match('/^[A-Z]+[a-z]/', $_POST['name'])) {
        $validation_errors[] = "Blogai ivestas vardas";
    }
    if (!preg_match('/^[A-Z]/', $_POST['lastname'])) {
        $validation_errors[] = "Blogai ivesta pavarde";
    }
    if (empty($_POST['message']) & !preg_match('/^[A-Za-z0-9]{100,300}$/', $_POST['message'])) {
        $validation_errors[] = "Blogai parasyta zinute";
    }

    return $validation_errors;
}

function printData()
{
    $data = 'data/zinute.txt';
    $content = file_get_contents($data);
    $formData = implode(',', $_POST);
    $content .= $formData . "/n";
    file_put_contents($data, $content);

    $messages = file_get_contents('data/zinute.txt', true);
    $messages = explode('/n', $messages);
    echo "<table class='table'><thead><tr>
          <th>Vardas</th>
          <th>Pavarde</th>
          <th>El. paštas</th>
          <th>Departamentas</th>
          <th>Žinutė</th>
          </tr></thead><tbody><tr>";
    foreach ($messages as $message) {
        echo "<tr>";
        $array = explode(',', $message);
        foreach ($array as $value) {
            echo "<td>$value</td>";
        }
    }
    echo "</tr></tbody></table>";
}