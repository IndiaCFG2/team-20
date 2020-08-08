from django.db import models

# Create your models here.
class Info():
    name = models.CharField(_("Scheme name"), max_length=50)
    description = models.CharField(_("Description about the scheme"), max_length=50)
    registerationlink = models.CharField(_("Registration link"), max_length=50)
    pdflink = models.CharField(_("Pdf Link"), max_length=50)

    def __str__(self):
        return self.name

   