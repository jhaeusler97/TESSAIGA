
from flask import Flask, request, render_template, url_for, redirect


app = Flask(__name__)
app.config.from_envvar('FLASKR_SETTINGS', silent=True)

@app.route("/")
def principal():
	return render_template("principal.html")

@app.route("/login", methods =["GET", "POST"])
def login():
	return render_template("login.html")

@app.route("/register", methods =["GET", "POST"])
def register():
	if request.method == "POST":
		if request.form["username"] != "" and request.form["pssw"] != "" and request.form["pssw2"] != "" and request.form["pssw"] == request.form["pssw2"]:
			archivo = open("./static/users.txt", "r")
			user = archivo.readline().splitlines()
			archivo.close()
			for i in range(len(user)):
				if user[i] != request.form["username"]:
					archivo = open("./static/users.txt","a")
					archivo.write(" "+request.form["username"])
					archivo.close()
					archivo = open("./static/passwords.txt","a")
					archivo.write(" "+request.form["pssw"])
					archivo.close()
					login()
	return render_template("register.html")


@app.route("/chat")
def chat():
	return render_template("chat.html")
if __name__ == "__main__":
	app.run(debug = True, port = 5000)
