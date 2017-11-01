
from flask import Flask, request, render_template
import flask
import requests


app = Flask(__name__)
app.config.from_envvar('FLASKR_SETTINGS', silent=True)

@app.route("/")
def login():
	return render_template("login.html")

@app.route("/register")
def register():
	return render_template("register.html")

if __name__ == "__main__":
	app.run(debug = True, port = 5000)
