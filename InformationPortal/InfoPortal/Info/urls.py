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
    path('query/',Querydetailview.as_view(),name = 'query'),
    path('comment/',Commentcreateview.as_view(),name = 'comment'),
    
]
