from django.urls import path
from . import views
from .views import (
    Infocreateview,
    Querycreateview,
    Querydetailview,
    Commentcreateview
    
)

urlpatterns = [
    path('',Infocreateview.as_view(),name = 'lets'),
    path('infos/',views.infos,name = 'infos'),
    path('query/',Querycreateview.as_view(),name = 'query'),
    path("queries/",views.queries,name="queries")  
]
