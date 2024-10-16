import tkinter as tk
from tkinter import messagebox
import mysql.connector

# Função para conectar ao banco de dados
def conectar_db():
    return mysql.connector.connect(
        host="localhost",
        user="root",
        password="",
        database="SeuBancoDeDados"  # Altere para o nome do seu banco de dados
    )

# Função para cadastrar usuário
def cadastrar_usuario():
    nome = entrada_nome.get()
    password = entrada_password.get()
    email = entrada_email.get()

    if not nome or not password or not email:
        messagebox.showwarning("Campos vazios", "Por favor, preencha todos os campos.")
        return

    try:
        conn = conectar_db()
        cursor = conn.cursor()
        cursor.execute("INSERT INTO usuarios (nome, password, email) VALUES (%s, %s, %s)", (nome, password, email))
        conn.commit()
        messagebox.showinfo("Sucesso", "Usuário cadastrado com sucesso!")
    except Exception as e:
        messagebox.showerror("Erro", f"Ocorreu um erro: {e}")
    finally:
        cursor.close()
        conn.close()

# Criar a janela principal
root = tk.Tk()
root.title("Cadastro de Usuários")

# Criar labels e entradas
label_nome = tk.Label(root, text="Nome:")
label_nome.pack()

entrada_nome = tk.Entry(root)
entrada_nome.pack()

label_password = tk.Label(root, text="Senha:")
label_password.pack()

entrada_password = tk.Entry(root, show="*")  # Oculta a senha
entrada_password.pack()

label_email = tk.Label(root, text="Email:")
label_email.pack()

entrada_email = tk.Entry(root)
entrada_email.pack()

# Botão de cadastro
botao_cadastrar = tk.Button(root, text="Cadastrar", command=cadastrar_usuario)
botao_cadastrar.pack()

# Iniciar o loop da interface
root.mainloop()
