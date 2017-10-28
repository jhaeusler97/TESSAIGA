
from flask import Flask, request, g, redirect, url_for, render_template, flash, session
import flask
import requests
import sys
from flask import json
import math
from sqlalchemy import *
import os

app = Flask(__name__)
app.config.from_envvar('FLASKR_SETTINGS', silent=True)

@app.route("/")
def login():
	return render_template("login.html")

if __name__ == "__main__":
	app.run(debug = True, port = 5000)
