<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <p>{{$txt}}</p>
  <form action="/" method="POST">
    <table>
      @csrf
      <tr>
        <th>部屋番</th>
        <td>
          <input type="text" name="room">
        </td>
      </tr>
    </table>
    <input type="submit" value="送信">
  </form>
</body>
</html>