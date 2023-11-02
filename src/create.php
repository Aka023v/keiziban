<body> 
    <h1>簡易Twitter</h1>
    <form method="post" action="./store.php">
        <table>
            <tr>
                <td>投稿者名</td>
                <td><input name="poster" placeholder="投稿者名の記入欄" required></td>
            </tr>
            <tr>
                <td>投稿</td>
                <td><textarea name="tweet" placeholder="ツイート記入欄" required></textarea></td>
            </tr>
            <tr>
                <td ></td>
                <td><button>送信</button></td>
            </tr>
        </table>
    </form>
</body>
