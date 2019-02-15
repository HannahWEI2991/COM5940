from flask import Flask, render_template, json, request
from flask import Markup
import requests

app=Flask(__name__)
app.config["DEBUG"] = False


@app.route('/chart')
def index():
    headers = {
        'Authorization': 'Bearer keyPGaOFOWVMaoigo',
    }

    params = (
        ('maxRecords', '100'),
        ('view', 'Grid view'),
    )

    r = requests.get('https://api.airtable.com/v0/appheI2nCfN9gkxgR/TOP100?api_key=keyPGaOFOWVMaoigo')
    dict = r.json()
    dataset = []
    for i in dict['records']:
            dict = i['fields']
            dataset.append(dict)
    return render_template('chart.html', entries=dataset, title='Chart Page')

@app.route('/')
def home():
    return render_template('intro.html')

@app.route('/intro')
def intro():
    return render_template('intro.html')
