<div class="blog-post">
    <table>
        <tr>
            <th>Электронная почта</th>
            <th>Отзыв</th>
            <th>Дата создания</th>
        </tr>
        @foreach($feedbacks as $feedback)
        <tr>
            <td>{{ $feedback->email }}</td>
            <td>{{ $feedback->message }}</td>
            <td>{{ $feedback->created_at->format('d.m.Y H:i:s') }}</td>
        </tr>
        @endforeach
    </table>
    <hr>
</div>
