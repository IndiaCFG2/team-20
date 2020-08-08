from django.shortcuts import render
import requests

def my_django_view(request,*args,**kwargs):
    try :
        response = requests.post('https://www.somedomain.com/some/url/save', params=request.POST)
        print(response.status_code)
        print(response)
    except:
        pass
    finally: 
        return render(request,"template.html",{})
# Create your views here.

