from django.shortcuts import render
import requests
import json

def my_django_view(request,*args,**kwargs):
    response = None
    try :
        response = requests.post('https://www.somedomain.com/some/url/save', params=request.POST) 
    except: 
        return render(request,"analytics.html",{})
    else:
        json = json.load(response)
        data = json.data
        return render(request,"analytics.html",{"onion" : data[0], "potato" : data[1], "Carrot" : data[2]})

