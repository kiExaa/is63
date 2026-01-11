<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload foto</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #d1e6e6 0%, #a8d5ce 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        
        form {
            background-color: white;
            padding: 50px;
            border-radius: 12px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 450px;
        }
        
        h2 {
            text-align: center;
            color: #02dfba;
            margin-bottom: 30px;
            font-size: 28px;
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 600;
            font-size: 14px;
            text-transform: capitalize;
            letter-spacing: 0.5px;
        }
        
        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
            transition: all 0.3s ease;
        }
        
        input[type="text"]:focus,
        input[type="file"]:focus {
            outline: none;
            border-color: #00ffd5;
            box-shadow: 0 0 0 3px rgba(76, 175, 80, 0.1);
        }
        
        input[type="file"] {
            padding: 10px 15px;
            cursor: pointer;
        }
        
        input[type="file"]::file-selector-button {
            padding: 8px 20px;
            background-color: #58c9c9;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-right: 10px;
        }
        
        input[type="file"]::file-selector-button:hover {
            background-color: #00ffd5;
        }
        
        button {
            width: 100%;
            padding: 14px;
            background-color: #58c9c9;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        button:hover {
            background-color: #00ffd5;
            box-shadow: 0 4px 12px rgba(5, 138, 114, 0.61);
            transform: translateY(-2px);
        }
        
        button:active {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <form action="proses_upload.php" method="POST" enctype="multipart/form-data">
        <h2> Upload Foto</h2>
        
        <div class="form-group">
            <label for="ket">Keterangan</label>
            <input type="text" id="ket" name="ket" placeholder="Masukkan keterangan foto...">
        </div>

        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" id="foto" accept="image/*" name="upload" required>
        </div>

        <button type="submit">Upload Foto</button>
    </form>
</body>
</html>