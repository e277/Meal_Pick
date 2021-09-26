<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   <table>
      <tr>
         <th>Student Name</th>
         <th>Meal Name</th>
         <th>Meal Type</th>
      </tr>
      <tr>
         @foreach ($meals as $meal)
             <td>
                {{ $meal->student_name }}
             </td>
             <td>
                {{ $meal->meal_name }}
             </td>
             <td>
                {{ $meal->meal_type }}
             </td>
         @endforeach
      </tr>
   </table>
</body>
</html>