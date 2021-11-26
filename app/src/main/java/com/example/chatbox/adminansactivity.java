package com.example.chatbox;

import androidx.appcompat.app.AppCompatActivity;
import androidx.appcompat.widget.Toolbar;

import android.content.Intent;
import android.content.SharedPreferences;
import android.graphics.Color;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
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

public class adminansactivity extends AppCompatActivity {
public Button btn;
public TextView problem;
public EditText answer;
public String id;
    public TextView descrption, email,register,bot,admin,tickets;

    SharedPreferences sharedpreferences;
    public static final String MyPREFERENCES = "MyPrefs" ;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_adminansactivity);

        problem=findViewById(R.id.problem);
        answer=findViewById(R.id.solutiontoissue);
        btn=findViewById(R.id.button3);
        sharedpreferences = getSharedPreferences(MyPREFERENCES,MODE_PRIVATE);

        Intent intent = getIntent();
         id = intent.getStringExtra("id");

         btn.setOnClickListener(new View.OnClickListener() {
             @Override
             public void onClick(View v) {
                 inserselecteditem();
             }
         });

        Toolbar myToolbar = (Toolbar) findViewById(R.id.toolbar);
        myToolbar.setTitle("Admin");




        descrption=findViewById(R.id.textView4);
        email=findViewById(R.id.textView5);
        sharedpreferences = getSharedPreferences(MyPREFERENCES,MODE_PRIVATE);




        selectitem();



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
                            for (int i = 0; i <= projectNameArray.length(); i++) {
                                JSONObject obj = projectNameArray.getJSONObject(i);





                                //Log.d("Dropdown",Dropdown.get(i));  this, R.layout.spinnertxt, makedata);
                                //        adaptermake.setDropDownViewResource(R.layout.itembgtxt
                            }

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


                String sql = "UPDATE `transactions` SET `solution`='"+answer.getText().toString()+"'  WHERE `ticketnumber`='"+id+"'";
                params.put("action", "insert_data");
                params.put("database", getResources().getString(R.string.database));
                params.put("sql", sql);


                return params;
            }
        };

        MyApplication.getInstance().addToRequestQueue(stringRequest);
    }


    private void selectitem() {

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
                            for (int i = 0; i <= projectNameArray.length(); i++) {
                                JSONObject obj = projectNameArray.getJSONObject(i);



                                problem.setText(obj.getString("description"));

                                //Log.d("Dropdown",Dropdown.get(i));  this, R.layout.spinnertxt, makedata);
                                //        adaptermake.setDropDownViewResource(R.layout.itembgtxt
                            }




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


                String sql = "select * from `transactions` where `ticketnumber`='"+id+"'";

                System.out.println(sql);

                params.put("action", "get_data");
                params.put("database", getResources().getString(R.string.database));
                params.put("sql", sql);


                return params;
            }
        };

        MyApplication.getInstance().addToRequestQueue(stringRequest);
    }


}