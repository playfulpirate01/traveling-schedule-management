<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>
    <style type="text/css">
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans&display=swap");

        * {
            margin: 0%;
            padding: 0%;
            font-family: "Open Sans", sans-serif;
        }

        body {
            background-image: url("https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80");
            background-size: cover;
            image-resolution: 1920;
            height: 100%;
            width: 100%;
        }

        .sign-up {
            display: flex;
            flex-direction: row;
            justify-content: center;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: min-content;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.5);
            line-height: 30px;
            font-size: 14px;
            text-transform: capitalize;
            font-weight: bold;
            background-color: white;
        }

        input[type="text"],
        input[type="text"]:hover,
        input[type="text"]:focus,
        input[type="text"]:active {
            border: none;
            border-bottom: 1px solid;
            border-radius: 2.5px;
            box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.5);
            text-align: center;
            outline-width: 0;
        }

        button[type="submit"],
        button[type="submit"]:hover,
        button[type="submit"]:focus,
        button[type="submit"]:active {
            border: none;
            border-bottom: 1px solid;
            border-radius: 2.5px;
            box-shadow: 0px 0px 2.5px 0px rgba(0, 0, 0, 0.5);
            text-align: center;
            outline-width: 0;
            padding: 5px;
            background: none;
        }
    </style>
    <main>
        <div class="sign-up">
            <form action="#">
                <label for="email">Your Email:</label>
                <input type="text" name="email" placeholder="Enter Email Here..." />
                <br />
                <label for="username">Create Username:</label>
                <input type="text" name="username" placeholder="Enter Username Here..." />
                <br />
                <label for="password">Create Password:</label>
                <input type="text" name="password" placeholder="Enter Password Here..." />
                <br />
                <br />
                <button type="submit">Submit</button>
            </form>
        </div>
    </main>
</body>

</html>
