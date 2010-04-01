<?php
  function getPage() {
    switch ($_GET['p']) {
      case "name":
      case "ip":
      case "id":
      case "all":
        return $_GET['p'];
      default:
        return "home";
    }
  }

  function getSearch() {
    return $_GET['q'];
  }

  function getSort() {
    return $_GET['s'];
  }

  function makeValidId($id) {
    return intval($id);
  }

  function showResultTable($resultArray, $page, $search) {
    echo "<table>
  <tr>
    <th><a href='?p={$page}&amp;q={$search}&amp;s=name'>User</a></th>
    <th><a href='?p={$page}&amp;q={$search}&amp;s=ip'>IP</a></th>
    <th><a href='?p={$page}&amp;q={$search}&amp;s=time'>Time</a></th>
  </tr>\n";
    foreach ($resultArray as $row) {
      echo "<tr>\n";
      echo "<td><a href='?p=id&amp;q={$row['id']}'>{$row['name']}</a></td>\n";
      echo "<td><a href='?p=ip&amp;q={$row['ip']}'>{$row['ip']}</a></td>\n";
      echo "<td>{$row['time']}</td>\n";
      echo "</tr>\n";
    }
    echo "</table>";
  }
?>
