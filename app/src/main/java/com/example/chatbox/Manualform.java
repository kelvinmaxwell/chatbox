package com.example.chatbox;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Color;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;

import org.json.JSONArray;
import org.json.JSONObject;

import java.util.HashMap;
import java.util.Map;

public class Manualform extends AppCompatActivity {
    public TextView descrption, email,register,bot,admin,tickets;
    public Button submit;
    public SharedPreferences sharedpreferences;
    public static final String MyPREFERENCES = "MyPrefs" ;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_manualform);
        Toast.makeText(getApplicationContext(), "manual system", Toast.LENGTH_SHORT).show();

        Toolbar myToolbar = (Toolbar) findViewById(R.id.toolbar);
        register=findViewById(R.id.register);
        bot=findViewById(R.id.bot);
        admin=findViewById(R.id.admin);
        tickets=findViewById(R.id.tickets);

        register.setText("Register");



        descrption=findViewById(R.id.textView4);
        email=findViewById(R.id.textView5);
        sharedpreferences = getSharedPreferences(MyPREFERENCES,MODE_PRIVATE);

        submit=findViewById(R.id.button);


        myToolbar.setTitleTextColor(Color.WHITE);
        submit.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                inserselecteditem();

            }
        });

        register.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(Manualform.this,registration.class);
                startActivity(i);
            }
        });

        bot.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(Manualform.this,MainActivity.class);
                startActivity(i);
            }
        });
        admin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(Manualform.this,admintickets.class);
                startActivity(i);
            }
        });

        tickets.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i=new Intent(Manualform.this,mytickets.class);
                startActivity(i);
            }
        });
    }



    private void inserselecteditem() {

        StringRequest stringRequest = new StringRequest(Request.Method.POST, getResources().getString(R.string.url),
                new Response.Listener<String>() {

                    @Override
                    public void onResponse(String response) {
                        if (response == null) {
                            Toast.makeText(getApplicationContext(), "Couldn't fetch the contacts! Pleas try again.", Toast.LENGTH_LONG).show();
                            return;
                        }
                        System.out.println("maxi"+response);
                        Toast.makeText(getApplicationContext(), "SAVED", Toast.LENGTH_SHORT).show();
                        try {
                            Log.d("JSON", response);

                            JSONObject eventObject = new JSONObject(response);
                            JSONArray projectNameArray = eventObject.getJSONArray("data");
                            String error_status=eventObject.getString("status");
                            System.out.println(error_status);




                        } catch (Exception e) {
                            Log.d("Tag",e.getMessage());


                        }




                        // adding contacts to contacts list



                        // refreshing recycler view

                    }
                }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                // error in getting json

                Toast.makeText(getApplicationContext(), "check connection " , Toast.LENGTH_SHORT).show();
            }
        }){
            @Override
            protected Map<String, String> getParams() throws AuthFailureError {
                Map<String,String> params = new HashMap<String,String>();


                String sql = "INSERT INTO `transactions`(`number`, `description`,`user`) VALUES ('"+email.getText().toString()+"','"+descrption.getText().toString()+"','"+sharedpreferences.getString("email",null)+"') ";

                params.put("action", "insert_data");
                params.put("database", getResources().getString(R.string.database));
                params.put("sql", sql);


                return params;
            }
        };

        MyApplication.getInstance().addToRequestQueue(stringRequest);
    }



}