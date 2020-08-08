# Generated by Django 3.1 on 2020-08-08 09:43

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('Info', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='info',
            name='description',
            field=models.CharField(blank=True, max_length=250, verbose_name='Description about the scheme'),
        ),
        migrations.AlterField(
            model_name='info',
            name='pdflink',
            field=models.CharField(blank=True, max_length=50, verbose_name='Pdf Link'),
        ),
        migrations.AlterField(
            model_name='info',
            name='registerationlink',
            field=models.CharField(blank=True, max_length=50, verbose_name='Registration link'),
        ),
    ]