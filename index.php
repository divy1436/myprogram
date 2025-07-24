<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #87CEFA;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        form {
            background-color: #FFD700;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #000080;
        }
        input[type="text"],
        input[type="tel"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #E0FFFF;
        }
        select {
            appearance: none;
            background-color: #E0FFFF;
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 10px;
        }
        textarea {
            resize: vertical;
            background-color: #E0FFFF;
        }
        button[type="submit"] {
            background-color: #4682B4;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #4169E1;
        }
        @media (max-width: 480px) {
            form {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <form action="/submit.php">
        <div>
            <label for="name">Name</label>
            <input id="name" type="text" placeholder="Enter Name" required>
        </div>
        <div>
            <label for="phone">Phone</label>
            <input id="phone" type="tel" placeholder="Enter number" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" placeholder="Enter Email" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Enter Password" required>
        </div>
        <div>
            <label for="dob">Date of birth</label>
            <input id="dob" type="date" required>
        </div>
        <div>
            <label for="gender">Gender</label>
            <select id="gender" required>
                <option value="" disabled selected>Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <p>Subscription Plan</p>
        <input type="radio" name="subscription" id="basic" value="basic">
        <label for="basic">Basic</label>
        <input type="radio" name="subscription" id="premium" value="premium">
        <label for="premium">Premium</label>
        <input type="radio" name="subscription" id="vip" value="vip">
        <label for="vip">VIP</label>
        <div>
            <input id="terms" type="checkbox" required>
            <label for="terms">I agree to the terms and conditions</label>
        </div>
        <div>
            <label for="comments">Comments</label>
            <textarea id="comments" placeholder="Enter your comments" rows="4"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
</body>
</html>
	

	
