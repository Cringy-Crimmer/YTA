from flask import Flask, render_template
import mysql.connector as sqlcon
app = Flask(__name__)

@app.route('/')
def Home_Page():
    return render_template('Home_Page.html')

@app.route('/game')
def Games():
    return render_template('index.html')

@app.route('/display')
def display():
    return render_template('sql.html')
