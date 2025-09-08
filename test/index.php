<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>

<body>
    <a href="/blabalbal"></a>
    <p>привет контекст</p>
    <img src='' alt="" width="">
    <input name="soda"></input>
    <script>
        let elm = document.querySelector("p")
        console.dir(document)
        console.log(window)
        console.log(document.body)
        console.dir(elm)

        console.dir(document.body.querySelector("[name='soda']"))
        elm.click()
    </script>

</body>

</html>