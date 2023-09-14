from flask import Flask, redirect, url_for, request
import model
import json

app = Flask(__name__)

@app.route("/", methods = ['POST'])
def hello_world():
    if request.method == 'POST':
        js = request.form['json']
        js = json.loads(js)
        # json = { aight
     
        #     'Analyse1': [7.5],
        #     'Algebre1': [8.0],
        #     'Electricite': [9.5],
        #     'Thermodynamique': [10.2],
        #     'CHIMIE': [12.3],
        #     'Langues': [10.8],
        #     'Moyenne S1': [9.6],
        #     'ANALYSE 2': [9.2],
        #     'ALGEBRE2': [10.1],
        #     'MECANIQUE DU POINT': [9.8],
        #     'PROCEDES DE FABRICATION': [11.5],
        #     'ANALYSE DES CIRCUITS': [10.9],
        #     'TECHNIQUES D\'EXPRESSION': [12.0],
        #     'Moyenne S2': [11.0],
        #     'Moyenne API1': [10.5],
        #     'Analyse3': [8.9],
        #     'Algebre3': [9.7],
        #     'MECANIQUE DU SOLIDE': [10.3],
        #     'ELECTROMAGNETISME': [11.2],
        #     'ELECTRONIQUE': [11.8],
        #     'TECHNIQUES D\'EXPRESSION II': [10.5],
        #     'Moyenne S3': [11.0],
        #     'ANALYSE NUMERIQUE': [9.6],
        #     'ALGORITHMIQUE & PROGRAMMATION': [10.0],
        #     'BASE DE LA CONCEPTION': [9.8],
        #     'METALLURGIE ET THERMOCHIMIE': [11.5],
        #     'TECHNIQUE DE DOCUMENTATION': [10.3],
        #     'DAO ET OUTILS DE MATLAB': [11.0],
        #     'Moyenne S4': [10.5],
        #     'Moyenne API2': [10.2]
        # }
        print(js)
        return model.predict(js)