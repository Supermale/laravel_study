<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 실전입문</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <table class="table">
        <tr>
            <th>ISBN 코드</th>
            <th>책이름</th>
            <th>가격</th>
            <th>출판사</th>
            <th>출간일</th>
            <th>샘플</th>
        </tr>
        <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->price }}원</td>
                <td>{{ $book->publisher }}</td>
                <td>{{ $book->published }}</td>
                <td>{{ $book->sample ? 'O' : 'X' }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>