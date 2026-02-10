<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto | Noel Mendez</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #004b93; 
            --bg-gradient: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --glass: rgba(255, 255, 255, 0.9);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--bg-gradient);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .card {
            background: var(--glass);
            backdrop-filter: blur(10px);
            padding: 40px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            border: 1px solid rgba(255,255,255,0.3);
            text-align: center;
        }

        h2 {
            margin-bottom: 8px;
            color: var(--primary);
            font-weight: 600;
        }

        .subtitle {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 30px;
        }

        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        label {
            display: block;
            font-size: 0.8rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        input, textarea {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-family: inherit;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
            box-sizing: border-box;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(0, 75, 147, 0.1);
        }

        textarea {
            height: 120px;
            resize: none;
        }

        button {
            width: 100%;
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 14px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.2s;
        }

        button:hover {
            background-color: #00366d;
            transform: translateY(-2px);
        }

        .footer-info {
            margin-top: 20px;
            font-size: 0.75rem;
            color: #94a3b8;
        }
    </style>
</head>
<body>

    <div class="card">
        <h2>Enviar Mensaje</h2>
        <p class="subtitle">Noel Mendez - Ingeniería de Sistemas</p>
        
        <form action="/contacto" method="GET">
            <div class="input-group">
                <label for="email">Tu Correo</label>
                <input type="email" id="email" name="email" placeholder="ejemplo@unab.edu.co" required>
            </div>

            <div class="input-group">
                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <button type="submit">Enviar a Contacto</button>
        </form>

        <div class="footer-info">
            UNAB • 5to Semestre • 2026
        </div>
    </div>

</body>
</html>